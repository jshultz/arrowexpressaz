<?php

class Addresses_model extends Model {

function getBillingByUserId() {
	$user_id = $this->tank_auth->get_user_id();
	$query = $this->db->get_where('bill_addresses', array('user_id'=>$user_id));
	return $query->result();
}

function getShippingByUserId() {
	$user_id = $this->tank_auth->get_user_id();
	$query = $this->db->get_where('ship_addresses', array('user_id'=>$user_id));
	return $query->result();
}

function getAddressByOriginId($origin_id) {
	$this->db->select('contact, company, street, street2, city, state, zip, phone');
	$query = $this->db->get_where('ship_addresses', array('id'=>$origin_id));
	return $query->result_array();
}

function getAddressByDestinationId($destination_id) {
	$this->db->select('contact, company, street, street2, city, state, zip, phone');
	$query = $this->db->get_where('ship_addresses', array('id'=>$destination_id));
	return $query->result_array();
}

function selectFromAddresses() {
	$user_id = $this->tank_auth->get_user_id();
	$this->db->select('id, user_id, contact, company, street, street2, city, state, zip, phone');
	return $this->db->get_where('ship_addresses', array('user_id'=>$user_id));
}

function selectDeliveryAddresses() {
	$user_id = $this->tank_auth->get_user_id();
	$this->db->select('id, contact, company, street, street2, city, state, zip, phone');
	return $this->db->get_where('ship_addresses', array('id'=>$id));
}

}