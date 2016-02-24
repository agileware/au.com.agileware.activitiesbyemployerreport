<?php
// This file declares a managed database record of type "ReportTemplate".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return array (
  0 => 
  array (
    'name' => 'CRM_Actbyorgreport_Form_Report_ActByOrg',
    'entity' => 'ReportTemplate',
    'params' => 
    array (
      'version' => 3,
      'label' => 'Activities by Organisation',
      'description' => 'Provides a list of Activities grouped by Organisation',
      'class_name' => 'CRM_Actbyorgreport_Form_Report_ActByOrg',
      'report_url' => 'au.com.agileware.actbyorgreport/actbyorg',
      'component' => '',
    ),
  ),
);