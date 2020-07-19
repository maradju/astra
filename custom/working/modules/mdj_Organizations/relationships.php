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
  'mdj_organizations_modified_user' => 
  array (
    'id' => '638c42cd-c56a-31da-ba71-5b1941740ddc',
    'relationship_name' => 'mdj_organizations_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mdj_Organizations',
    'rhs_table' => 'mdj_organizations',
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
  'mdj_organizations_created_by' => 
  array (
    'id' => '6463fbae-7e86-c1cd-2fab-5b1941e6ab88',
    'relationship_name' => 'mdj_organizations_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mdj_Organizations',
    'rhs_table' => 'mdj_organizations',
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
  'mdj_organizations_assigned_user' => 
  array (
    'id' => '64fe32a3-9fe5-b7cc-66f7-5b1941c5770a',
    'relationship_name' => 'mdj_organizations_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'mdj_Organizations',
    'rhs_table' => 'mdj_organizations',
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
  'securitygroups_mdj_organizations' => 
  array (
    'id' => '65566b7b-6922-7983-f1ab-5b1941d13b17',
    'relationship_name' => 'securitygroups_mdj_organizations',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'mdj_Organizations',
    'rhs_table' => 'mdj_organizations',
    'rhs_key' => 'id',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'mdj_Organizations',
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
  'mdj_organizations_accounts_1' => 
  array (
    'id' => 'a31058f0-d51c-a0aa-d961-5b19412b5eae',
    'relationship_name' => 'mdj_organizations_accounts_1',
    'lhs_module' => 'mdj_Organizations',
    'lhs_table' => 'mdj_organizations',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'join_table' => 'mdj_organizations_accounts_1_c',
    'join_key_lhs' => 'mdj_organizations_accounts_1mdj_organizations_ida',
    'join_key_rhs' => 'mdj_organizations_accounts_1accounts_idb',
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
  'mdj_organizations_prospects_1' => 
  array (
    'id' => 'a65b26ed-1ccd-0311-ba83-5b19414babbf',
    'relationship_name' => 'mdj_organizations_prospects_1',
    'lhs_module' => 'mdj_Organizations',
    'lhs_table' => 'mdj_organizations',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'id',
    'join_table' => 'mdj_organizations_prospects_1_c',
    'join_key_lhs' => 'mdj_organizations_prospects_1mdj_organizations_ida',
    'join_key_rhs' => 'mdj_organizations_prospects_1prospects_idb',
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
  'contacts_mdj_organizations_1' => 
  array (
    'id' => 'a86b7e42-ce39-bb37-46e2-5b1941e8d907',
    'relationship_name' => 'contacts_mdj_organizations_1',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'mdj_Organizations',
    'rhs_table' => 'mdj_organizations',
    'rhs_key' => 'id',
    'join_table' => 'contacts_mdj_organizations_1_c',
    'join_key_lhs' => 'contacts_mdj_organizations_1contacts_ida',
    'join_key_rhs' => 'contacts_mdj_organizations_1mdj_organizations_idb',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'mdj_agencies_mdj_organizations_1' => 
  array (
    'id' => 'a9899244-e55d-9c56-75cb-5b194155319e',
    'relationship_name' => 'mdj_agencies_mdj_organizations_1',
    'lhs_module' => 'mdj_Agencies',
    'lhs_table' => 'mdj_agencies',
    'lhs_key' => 'id',
    'rhs_module' => 'mdj_Organizations',
    'rhs_table' => 'mdj_organizations',
    'rhs_key' => 'id',
    'join_table' => 'mdj_agencies_mdj_organizations_1_c',
    'join_key_lhs' => 'mdj_agencies_mdj_organizations_1mdj_agencies_ida',
    'join_key_rhs' => 'mdj_agencies_mdj_organizations_1mdj_organizations_idb',
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
  'calls_mdj_organizations_1' => 
  array (
    'id' => 'b292d8ca-8f6c-62b2-4f75-5b194196ddd0',
    'relationship_name' => 'calls_mdj_organizations_1',
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'mdj_Organizations',
    'rhs_table' => 'mdj_organizations',
    'rhs_key' => 'id',
    'join_table' => 'calls_mdj_organizations_1_c',
    'join_key_lhs' => 'calls_mdj_organizations_1calls_ida',
    'join_key_rhs' => 'calls_mdj_organizations_1mdj_organizations_idb',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'mdj_organizations_calls_1' => 
  array (
    'rhs_label' => 'Calls',
    'lhs_label' => 'Organizations',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'mdj_Organizations',
    'rhs_module' => 'Calls',
    'relationship_type' => 'many-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'mdj_organizations_calls_1',
  ),
);