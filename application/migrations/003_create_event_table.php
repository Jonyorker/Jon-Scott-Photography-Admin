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
                        // Shotlist Checkboxes and notes
                        'bride_before_hair' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'bride_before_makeup' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'bride_before_dress' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'bride_before_accesories' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'bride_before_fam_assist' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'bride_before_jewelry' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'bride_before_mirror' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'bride_before_boutonniere' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'bride_before_corsage' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'bride_before_children' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'bride_before_hugging' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'bride_before_notes' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'groom_before_hair' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_shave' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_dress' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_accesories' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_fam_assist' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_jewelry' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_mirror' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_boutonniere' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_corsage' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_children' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_hugging' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_notes' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'ceremony_venue' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_special_places' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_guests_arriving' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_groom_greet' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_honored' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_parents_arrive' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_parents_seated' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_bridesmaids' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_maid_of_honor' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_flower_girl' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_groom_entering' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_crowd' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_officiant' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_altar' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_bride_entrance' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_look' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_long_shot' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_parent_giving' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_unity' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_religious' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_ring_bearer' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_vows' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_vows_closeup' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_kiss' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_applause' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_down_aisle' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_confetti' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_congrats' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_steps' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_leaving' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_notes' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_hugging' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_hugging' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_hugging' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_hugging' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_hugging' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_hugging' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_hugging' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_hugging' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_hugging' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_hugging' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_hugging' => array(
                                'type' => 'BOOLEAN',
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