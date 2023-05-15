<?php
Class Country
{
    private $nomPays;
    private $equipes;

    public function __Construct ($nomPays)
    {
        $this->nomPays=$nomPays;
        $this->equipes=[];
    }
}