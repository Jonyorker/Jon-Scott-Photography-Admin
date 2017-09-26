<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Emergency_Client_Table extends CI_Migration {

        public function up()
        {
                $fields = array(
                        'emergency_name' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'emergency_phone_number' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ));
                $this->dbforge->add_column('admin_client', $fields);
        }

        public function down()
        {
                $this->dbforge->drop_table('admin_client');
        }
}