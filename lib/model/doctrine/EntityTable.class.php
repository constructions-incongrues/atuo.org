<?php


class EntityTable extends Doctrine_Table
{
    /**
     * @return EntityTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Entity');
    }

    /**
     * Returns list of entities of given type in given category.
     *
     * @param integer $category_id Category database identifier
     * @param string  $type        Entity type name
     * @param string  $criteria    Eventual additional sorting criteria value
     * @param integer $limit       Maximum number or records to return
     *
     * @return array
     */
    public function findByMainCategoryId($category_id, $type, $criteria = null, $limit = 25)
    {
        $q = Doctrine_Query::create()
            ->select()
            ->from('Entity e')
            ->where('e.type = ?', $type)
            ->innerJoin('e.MainCategories c with c.id = ?', $category_id)
            // TODO : method call does not add LIMIT clause to generated query (http://www.doctrine-project.org/jira/browse/DC-485)
            ->limit($limit);

        if ($criteria)
        {
            $q->andWhere(sprintf('e.%s = ?', Doctrine::getTable($type)->getAdditionalSortingCriteriaName()), $criteria);
        }

        $entities = $q->execute();
        $q->free();

        return $entities;
    }

    /**
     * Returns list of unique values for entity's sorting criteria (if any).
     *
     * @return array
     */
    public function findAdditionalSortingCriteria()
    {
        $criterias = array();

        if ($this->getAdditionalSortingCriteriaName())
        {
            $connection = Doctrine_Manager::connection();
            /* @var PDOStatement $results */
            $results = $connection->execute(sprintf('
            	SELECT DISTINCT(%s)
            	FROM entity e
    			WHERE e.type = "%s"', $this->getAdditionalSortingCriteriaName(), $this->getComponentName()));
            $criterias = array_keys($results->fetchAll(PDO::FETCH_UNIQUE));
        }

        return $criterias;
    }

    /**
     * Returns entity additional sorting criteria name.
     *
     * @return string or false if entity does not have have an additional sorting criteria
     */
    public function getAdditionalSortingCriteriaName()
    {
        return false;
    }
}