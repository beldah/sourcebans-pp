<?php
$this->db->query("ALTER TABLE `:prefix_protests` ADD `pip` varchar(64) NOT NULL");
return $this->db->execute();
