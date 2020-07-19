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
  'nov_judicial_proceeding_modified_user' => 
  array (
    'id' => '9ffa7314-ca67-4704-bd9e-5b190e980021',
    'relationship_name' => 'nov_judicial_proceeding_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'nov_judicial_proceeding',
    'rhs_table' => 'nov_judicial_proceeding',
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
  'nov_judicial_proceeding_created_by' => 
  array (
    'id' => 'a0830004-5e0f-d9f4-c0ad-5b190e9f8429',
    'relationship_name' => 'nov_judicial_proceeding_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'nov_judicial_proceeding',
    'rhs_table' => 'nov_judicial_proceeding',
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
  'nov_judicial_proceeding_assigned_user' => 
  array (
    'id' => 'a0d5aeb5-03ea-a941-d21d-5b190e97624a',
    'relationship_name' => 'nov_judicial_proceeding_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'nov_judicial_proceeding',
    'rhs_table' => 'nov_judicial_proceeding',
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
  'securitygroups_nov_judicial_proceeding' => 
  array (
    'id' => 'a16b9c71-ba37-3583-b6ca-5b190ee02485',
    'relationship_name' => 'securitygroups_nov_judicial_proceeding',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'nov_judicial_proceeding',
    'rhs_table' => 'nov_judicial_proceeding',
    'rhs_key' => 'id',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'nov_judicial_proceeding',
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
  'nov_judicial_proceeding_prospects_1' => 
  array (
    'id' => 'e038d1b6-3220-49c9-fad1-5b190e64895d',
    'relationship_name' => 'nov_judicial_proceeding_prospects_1',
    'lhs_module' => 'nov_judicial_proceeding',
    'lhs_table' => 'nov_judicial_proceeding',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'id',
    'join_table' => 'nov_judicial_proceeding_prospects_1_c',
    'join_key_lhs' => 'nov_judicial_proceeding_prospects_1nov_judicial_proceeding_ida',
    'join_key_rhs' => 'nov_judicial_proceeding_prospects_1prospects_idb',
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
  'nov_judicial_proceeding_mdj_agencies_1' => 
  array (
    'id' => 'e16901b1-9674-30da-70dc-5b190e0df1e7',
    'relationship_name' => 'nov_judicial_proceeding_mdj_agencies_1',
    'lhs_module' => 'nov_judicial_proceeding',
    'lhs_table' => 'nov_judicial_proceeding',
    'lhs_key' => 'id',
    'rhs_module' => 'mdj_Agencies',
    'rhs_table' => 'mdj_agencies',
    'rhs_key' => 'id',
    'join_table' => 'nov_judicial_proceeding_mdj_agencies_1_c',
    'join_key_lhs' => 'nov_judici166bceeding_ida',
    'join_key_rhs' => 'nov_judicial_proceeding_mdj_agencies_1mdj_agencies_idb',
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
  'nov_judicial_proceeding_accounts_1' => 
  array (
    'id' => 'e3b2c639-c002-aed3-6793-5b190eaa7c5f',
    'relationship_name' => 'nov_judicial_proceeding_accounts_1',
    'lhs_module' => 'nov_judicial_proceeding',
    'lhs_table' => 'nov_judicial_proceeding',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'join_table' => 'nov_judicial_proceeding_accounts_1_c',
    'join_key_lhs' => 'nov_judicial_proceeding_accounts_1nov_judicial_proceeding_ida',
    'join_key_rhs' => 'nov_judicial_proceeding_accounts_1accounts_idb',
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
  'nov_judicial_proceeding_documents_1' => 
  array (
    'rhs_label' => 'Documents',
    'lhs_label' => 'Judicial proceeding',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'nov_judicial_proceeding',
    'rhs_module' => 'Documents',
    'relationship_type' => 'many-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'nov_judicial_proceeding_documents_1',
  ),
);