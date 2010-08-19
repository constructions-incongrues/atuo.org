<?php

/**
 * entity actions.
 *
 * @package    Atuo
 * @subpackage Actions
 */
class entityActions extends sfActions
{
    /**
     * Executes view action.
     *
     * @param sfRequest $request A request object
     *
     * @return string Template name
     */
    public function executeView(sfWebRequest $request)
    {
        // Fetch entity
        $entity = EntityTable::getInstance()->findOneBySlug($request->getParameter('slugEntity'));
        $this->forward404Unless($entity);

        // Pass data to view
        $this->entity = $entity;

        // Select template
        return sfView::SUCCESS;
    }

    /**
     * Executed when displaying contents of a category.
     *
     * @param sfWebRequest $request Current request
     *
     * @return string Template name
     */
    public function executeList(sfWebRequest $request)
    {
        // Retrieve category
        // TODO : Category related code must go into a component (or slot ?)
        /* @var $category MainCategory */
        $category = MainCategoryTable::getInstance()->findOneBySlug($request->getParameter('slugCategory'));
        $this->forward404Unless($category);

        // Grab all types of entities contained in category
        $entityTypes = $category->getEntityTypes();

        // Fetch appropriate entities
        $additionalSortingCriteria = array();
        $viewName = 'Success';
        if ($request->hasParameter('entityType'))
        {
            // Find out if entity type has additional sorting criteria
            /* @var $entitiesTable EntityTable */
            $entitiesTable = Doctrine_Core::getTable($request->getParameter('entityType'));

            // Get restricted set of entities
            if ($entitiesTable)
            {
                $additionalSortingCriteria = $entitiesTable->findAdditionalSortingCriteria();
                $entities = $entitiesTable->findByMainCategoryId($category->id, $request->getParameter('entityType'), $request->getParameter('criteria'));
            }

            // Find out which view must be used to display the entities
            $entitySettings = MainCategoryEntityTypeSettingsTable::getInstance()->findOneByType($request->getParameter('entityType'), Doctrine_Core::HYDRATE_ARRAY);
            if ($entitySettings)
            {
                $viewName = $entitySettings['view_name'];
            }
        }
        else
        {
            $entities = $category->Entities;
        }

        // Pass data to view
        $this->category = $category;
        $this->entityTypes = $entityTypes;
        $this->entities = $entities;
        $this->additionalSortingCriteria = $additionalSortingCriteria;

        // Select template
        return $viewName;
    }
}
