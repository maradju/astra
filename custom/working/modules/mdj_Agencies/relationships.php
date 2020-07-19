<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */


$relationships = array (
  'mdj_agencies_modified_user' => 
  array (
    'id' => '89eedbbf-f584-886d-138b-5b193845217b',
    'relationship_name' => 'mdj_agencies_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mdj_Agencies',
    'rhs_table' => 'mdj_agencies',
    'rhs_key' => 'modified_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'mdj_agencies_created_by' => 
  array (
    'id' => '8a8687be-7af7-56b5-81de-5b19384e31f8',
    'relationship_name' => 'mdj_agencies_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mdj_Agencies',
    'rhs_table' => 'mdj_agencies',
    'rhs_key' => 'created_by',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'mdj_agencies_assigned_user' => 
  array (
    'id' => '8b211a53-baab-8224-90cd-5b1938d756a2',
    'relationship_name' => 'mdj_agencies_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mdj_Agencies',
    'rhs_table' => 'mdj_agencies',
    'rhs_key' => 'assigned_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'securitygroups_mdj_agencies' => 
  array (
    'id' => '8b74600a-72af-173d-e212-5b1938d552fa',
    'relationship_name' => 'securitygroups_mdj_agencies',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'mdj_Agencies',
    'rhs_table' => 'mdj_agencies',
    'rhs_key' => 'id',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'mdj_Agencies',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'mdj_agencies_prospects_1' => 
  array (
    'id' => 'db99e30d-4062-0e14-cd51-5b19388be01f',
    'relationship_name' => 'mdj_agencies_prospects_1',
    'lhs_module' => 'mdj_Agencies',
    'lhs_table' => 'mdj_agencies',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'id',
    'join_table' => 'mdj_agencies_prospects_1_c',
    'join_key_lhs' => 'mdj_agencies_prospects_1mdj_agencies_ida',
    'join_key_rhs' => 'mdj_agencies_prospects_1prospects_idb',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'mdj_agencies_nov_judicial_proceeding_1' => 
  array (
    'id' => 'dbf68a9d-57b8-2e46-ed46-5b1938a5cbcc',
    'relationship_name' => 'mdj_agencies_nov_judicial_proceeding_1',
    'lhs_module' => 'mdj_Agencies',
    'lhs_table' => 'mdj_agencies',
    'lhs_key' => 'id',
    'rhs_module' => 'nov_judicial_proceeding',
    'rhs_table' => 'nov_judicial_proceeding',
    'rhs_key' => 'id',
    'join_table' => 'mdj_agencies_nov_judicial_proceeding_1_c',
    'join_key_lhs' => 'mdj_agencies_nov_judicial_proceeding_1mdj_agencies_ida',
    'join_key_rhs' => 'mdj_agenci0c81ceeding_idb',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'mdj_agencies_fp_event_locations_1' => 
  array (
    'id' => 'dd7c3f3d-ff1d-47a3-45c0-5b193892f53e',
    'relationship_name' => 'mdj_agencies_fp_event_locations_1',
    'lhs_module' => 'mdj_Agencies',
    'lhs_table' => 'mdj_agencies',
    'lhs_key' => 'id',
    'rhs_module' => 'FP_Event_Locations',
    'rhs_table' => 'fp_event_locations',
    'rhs_key' => 'id',
    'join_table' => 'mdj_agencies_fp_event_locations_1_c',
    'join_key_lhs' => 'mdj_agencies_fp_event_locations_1mdj_agencies_ida',
    'join_key_rhs' => 'mdj_agencies_fp_event_locations_1fp_event_locations_idb',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'mdj_agencies_contacts_1' => 
  array (
    'id' => 'de182d75-8243-839b-a6c8-5b19382a1204',
    'relationship_name' => 'mdj_agencies_contacts_1',
    'lhs_module' => 'mdj_Agencies',
    'lhs_table' => 'mdj_agencies',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'join_table' => 'mdj_agencies_contacts_1_c',
    'join_key_lhs' => 'mdj_agencies_contacts_1mdj_agencies_ida',
    'join_key_rhs' => 'mdj_agencies_contacts_1contacts_idb',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'mdj_agencies_fp_event_locations_2' => 
  array (
    'id' => 'df466e2c-6ea4-96e7-729d-5b1938b0fd6c',
    'relationship_name' => 'mdj_agencies_fp_event_locations_2',
    'lhs_module' => 'mdj_Agencies',
    'lhs_table' => 'mdj_agencies',
    'lhs_key' => 'id',
    'rhs_module' => 'FP_Event_Locations',
    'rhs_table' => 'fp_event_locations',
    'rhs_key' => 'id',
    'join_table' => 'mdj_agencies_fp_event_locations_2_c',
    'join_key_lhs' => 'mdj_agencies_fp_event_locations_2mdj_agencies_ida',
    'join_key_rhs' => 'mdj_agencies_fp_event_locations_2fp_event_locations_idb',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'mdj_agencies_calls_1' => 
  array (
    'id' => 'dfa4333a-c93d-5b23-5659-5b1938efdf6f',
    'relationship_name' => 'mdj_agencies_calls_1',
    'lhs_module' => 'mdj_Agencies',
    'lhs_table' => 'mdj_agencies',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'id',
    'join_table' => 'mdj_agencies_calls_1_c',
    'join_key_lhs' => 'mdj_agencies_calls_1mdj_agencies_ida',
    'join_key_rhs' => 'mdj_agencies_calls_1calls_idb',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'mdj_agencies_leads_1' => 
  array (
    'id' => 'e29bf8a8-e1b1-1a06-a6c9-5b1938b2e87b',
    'relationship_name' => 'mdj_agencies_leads_1',
    'lhs_module' => 'mdj_Agencies',
    'lhs_table' => 'mdj_agencies',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'join_table' => 'mdj_agencies_leads_1_c',
    'join_key_lhs' => 'mdj_agencies_leads_1mdj_agencies_ida',
    'join_key_rhs' => 'mdj_agencies_leads_1leads_idb',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'mdj_agencies_tasks_1' => 
  array (
    'id' => 'e4c5bc18-600e-8a93-2651-5b1938dad267',
    'relationship_name' => 'mdj_agencies_tasks_1',
    'lhs_module' => 'mdj_Agencies',
    'lhs_table' => 'mdj_agencies',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'id',
    'join_table' => 'mdj_agencies_tasks_1_c',
    'join_key_lhs' => 'mdj_agencies_tasks_1mdj_agencies_ida',
    'join_key_rhs' => 'mdj_agencies_tasks_1tasks_idb',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'mdj_agencies_accounts_1' => 
  array (
    'id' => 'e6510363-f269-0620-5f10-5b19383c283f',
    'relationship_name' => 'mdj_agencies_accounts_1',
    'lhs_module' => 'mdj_Agencies',
    'lhs_table' => 'mdj_agencies',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'join_table' => 'mdj_agencies_accounts_1_c',
    'join_key_lhs' => 'mdj_agencies_accounts_1mdj_agencies_ida',
    'join_key_rhs' => 'mdj_agencies_accounts_1accounts_idb',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'mdj_agencies_mdj_organizations_1' => 
  array (
    'rhs_label' => 'Organizations',
    'lhs_label' => 'Agencies',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'mdj_Agencies',
    'rhs_module' => 'mdj_Organizations',
    'relationship_type' => 'many-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'mdj_agencies_mdj_organizations_1',
  ),
);