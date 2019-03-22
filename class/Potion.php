<?php

class Potion
{

    private function Calcula($PP, $PR, $MP, $NC, $DZ, $ST, $IT, $dificuldade)
    {
        $chance = (($PP) + ($PR * 3) + ($MP) + ($NC * 0.2) + ($DZ * 0.1) + ($ST * 0.1) + ($IT * 0.05) + ($dificuldade));
        echo'<h4>'.$chance.'%'.'<h4>';
    }

    public function HealPotion($PP, $PR, $MP, $NC, $DZ, $ST, $IT)
    {
        $dificuldade = 0.2;
        $this->Calcula($PP, $PR, $MP, $NC, $DZ, $ST, $IT, $dificuldade);
    }

    public function Alcool($PP, $PR, $MP, $NC, $DZ, $ST, $IT)
    {
        $dificuldade = 0.1;
        $this->Calcula($PP, $PR, $MP, $NC, $DZ, $ST, $IT, $dificuldade);   
    }

    public function Frascos($PP, $PR, $MP, $NC, $DZ, $ST, $IT)
    {
        $dificuldade = 0;
        $this->Calcula($PP, $PR, $MP, $NC, $DZ, $ST, $IT, $dificuldade);
    }

    public function PropriedadesPCvermelha($PP, $PR, $MP, $NC, $DZ, $ST, $IT)
    {
        $dificuldade = -0.05;
        $this->Calcula($PP, $PR, $MP, $NC, $DZ, $ST, $IT, $dificuldade);
    }

    public function CompactaAmarela($PP, $PR, $MP, $NC, $DZ, $ST, $IT)
    {
        $dificuldade = -0.07;
        $this->Calcula($PP, $PR, $MP, $NC, $DZ, $ST, $IT, $dificuldade);
    }

    public function RevestimentoPCbranca($PP, $PR, $MP, $NC, $DZ, $ST, $IT)
    {
        $dificuldade = -0.1;
        $this->Calcula($PP, $PR, $MP, $NC, $DZ, $ST, $IT, $dificuldade);
    }
}