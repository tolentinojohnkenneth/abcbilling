<?php

class Documents_model extends CORE_Model {
    protected  $table="document_types";
    protected  $pk_id="document_type_id";

    function __construct() {
        parent::__construct();
    }

    function get_documents_list($document_type_id=null){
        $sql="  SELECT
                  d.*,
                  dc.document_category_id,
                  dc.document_category
                FROM
                  document_types as d
                  LEFT JOIN document_category as dc ON dc.document_category_id=d.document_category_id 
                  AND dc.is_deleted=FALSE AND dc.is_active=TRUE
                WHERE
                    d.is_deleted=FALSE AND d.is_active=TRUE 
                ".($document_type_id==null?"":" AND d.document_type_id=$document_type_id")."
            ";
        return $this->db->query($sql)->result();
    }
}
?>