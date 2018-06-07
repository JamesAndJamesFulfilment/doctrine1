<?php
class PolicyCodeN extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('policy_codes');
        $this->hasColumn('id', 'integer', 4, array('notnull' => true, 'primary' => true, 'autoincrement' => true));
        $this->hasColumn('code', 'integer', 4, array(  'notnull' => true,  'notblank' => true,));
        $this->hasColumn('description', 'string', 4000, array(  'notnull' => true,  'notblank' => true,));
    }
}
