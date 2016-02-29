<?php
// This file declares a managed database record of type "ReportTemplate".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return array (
  0 => 
  array (
    'name' => 'CRM_Activitiesbyemployerreport_Form_Report_ActivitiesByEmployer',
    'entity' => 'ReportTemplate',
    'params' => 
    array (
      'version' => 3,
      'label' => 'Activities by Employer',
      'description' => 'Provides a list of Activities grouped by Employer name',
      'class_name' => 'CRM_Activitiesbyemployerreport_Form_Report_ActivitiesByEmployer',
      'report_url' => 'au.com.agileware.activitiesbyemployerreport/activitiesbyemployer',
      'component' => '',
    ),
  ),
);