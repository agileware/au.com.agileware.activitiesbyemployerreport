# Activities By Employer Custom Report (au.com.agileware.activitiesbyemployerreport)

This is a [CiviCRM](https://civicrm.org) extension which adds a custom **CiviReport**
template, **Activities by Employer**, that lists CiviCRM Activities grouped by the
Employer (organisation) of the contacts involved. CiviCRM's core Activity reports have
no way to group or filter Activities by the Employer of the Source, Assignee, or Target
contact — this extension fills that gap, making it possible to see, for example, how much
staff/volunteer engagement activity relates to each employer organisation.

The extension is licensed under [AGPL-3.0](LICENSE.txt).

## Usage

Once installed, the report is available like any other CiviCRM report — no separate menu
item, settings page, or configuration screen is added.

1. Go to **Reports > New Report** (or search for it in the report list) and select
   **Activities by Employer**.
2. Configure the **Display Columns**, **Filters**, and **Sorting** as required, then run
   the report as usual.

### Columns

The report can display, for each Activity:

* **Employer Name** — the organisation name of the Source, Assignee, or Target contact
  (the report produces one row per Activity per employer relationship found).
* **Contact Name(s)** — Source, Assignee, and Target contact names, each linking to the
  contact's summary page.
* Contact **Email** and **Phone** for Source, Assignee, and Target contacts.
* Contact **Address** fields (via CiviCRM's standard address columns).
* **Activity Type**, **Subject**, **Activity Date**, **Status**, **Duration**, and
  **Details** (with a "View Activity Record" link), and Activities past their scheduled
  date that aren't Completed are highlighted as overdue.
* If the **CiviCampaign** component is enabled: **Survey Result**, **Campaign**, and
  **Engagement Index** columns are also available.

### Filters

* **Employer Name** (Source / Assignee / Target, partial match).
* **Contact Name** (Source / Assignee / Target, partial match), plus **Limit to Current
  User** (only Activities the logged-in user is a Source/Assignee/Target of).
* **Activity Date**, **Activity Type** (multi-select), **Activity Status**
  (multi-select), and **Activity Details** (text search).
* Standard CiviCRM **Group** and **Tag** filters on the Activity.
* If the **CiviCampaign** component is enabled: filter by **Campaign** and **Engagement
  Index**.
* If the **CiviCase** component is enabled and the user has **access all cases and
  activities** permission, an **Include Case Activities** filter is shown, and Case
  activity types become available in the Activity Type filter.

Target contacts appearing in the filtered results can be added to a CiviCRM Group using
the report's standard "Add to Group" action.

The report respects each user's contact-level ACLs (only Activities involving contacts
the user can see are included), and requires the standard **access CiviReport**
permission, same as any other CiviCRM report.

## Special configuration requirements

None. There are no settings pages, API keys, credentials, or dependent extensions to
configure — installing the extension registers the report template automatically, and
it is immediately available from CiviCRM's report list.

## Requirements

* CiviCRM 5.51+

## Installation (Web UI)

Learn more about installing CiviCRM extensions in the [CiviCRM Sysadmin
Guide](https://docs.civicrm.org/sysadmin/en/latest/customize/extensions/).

# About the Authors

This CiviCRM extension was developed by the team at [Agileware](https://agileware.com.au).

[Agileware](https://agileware.com.au) provide a range of CiviCRM services including:

  * CiviCRM migration
  * CiviCRM integration
  * CiviCRM extension development
  * CiviCRM support
  * CiviCRM hosting
  * CiviCRM remote training services

Support your Australian [CiviCRM](https://civicrm.org) developers, [contact Agileware](https://agileware.com.au/contact) today!

![Agileware](logo/agileware-logo.png)
