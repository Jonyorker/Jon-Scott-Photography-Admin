<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Event_Table extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'event_id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'venue_name' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'venue_website' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'venue_address' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'venue_phone' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'venue_contact_name' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'date' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'prep_time' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'start_time' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'end_time' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'delivery_medium' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'notes' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'hours_creative' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'hours_develop' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'price' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        
                ));
                $this->dbforge->add_key('event_id', TRUE);
                $this->dbforge->create_table('admin_event');
        }

        public function down()
        {
                $this->dbforge->drop_table('admin_event');
        }
}