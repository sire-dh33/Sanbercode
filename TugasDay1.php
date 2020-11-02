<?php
    trait Hewan
    {
        public $nama, $darah=50, $jumlkaki, $keahlian;

        public function atraksi()
        {
            if ($this->nama == "Elang")
            {
                return "<br> Elang menggunakan abilitynya untuk Terbang Tinggi <br> <br>";
            }
            else if ($this->nama == "Harimau")
            {
                return "<br> Harimau menggunakan abilitynya untuk Lari Cepat <br> <br>";
            }
        }
    }

    trait Fight
    {
        public $attackPower, $defencePower;

        public function serang()
        {
            if ($this->nama == "Elang")
            {
                return "<br>> Elang menyerang Harimau <br>" . $this->diserang();
            }
            else if ($this->nama == "Harimau")
            {
                return "<br>> Harimau menyerang Elang <br>" . $this->diserang();
            }

        }

        public function diserang()
        {
            if ($this->nama == "Elang")
            {
                $this->darah -= $this->attackPower/$this->defencePower;
                return "------- <br> Harimau sedang Diserang, Darah ".$this->nama." tersisa ... ". $this->darah."<br>";
            }
            else if ($this->nama == "Harimau")
            {
                $this->darah -= $this->attackPower/$this->defencePower;
                return "------- <br> Elang sedang Diserang, Darah ".$this->nama." tersisa ... ". $this->darah."<br>";
            }
        }
    }

    class Elang
    {
        use Hewan, Fight;

        public function GetInfoHewan()
        {
            return "<br> Nama : ".$this->nama." || Jumlah Kaki : ".$this->jumlKaki.
            "  --  Keahlian : ".$this->keahlian." || Attack power = ".$this->attackPower.
            " -- Defense power = ".$this->defencePower." || Darah : ".$this->darah."<br> -----------------------   ";
        }
    }

    class Harimau
    {
        use Hewan, Fight;

        public function GetInfoHewan()
        {
            return "<br> Nama : ".$this->nama." || Jumlah Kaki : ".$this->jumlKaki.
            "  --  Keahlian : ".$this->keahlian." || Attack power = ".$this->attackPower.
            " -- Defense power = ".$this->defencePower." || Darah : ".$this->darah."<br> ----------------------- <br>";
        }
    }

    $elang                = new Elang();
    $elang->nama          = "Elang";
    $elang->jumlKaki      = 2;
    $elang->keahlian      = "Terbang Tinggi";
    $elang->attackPower   = 10;
    $elang->defencePower  = 5;

    $harimau                = new Harimau();
    $harimau->nama          = "Harimau";
    $harimau->jumlKaki      = 4;
    $harimau->keahlian      = "Lari Cepat";
    $harimau->attackPower   = 7;
    $harimau->defencePower  = 8;

    echo $elang->GetInfoHewan();
    echo $harimau->GetInfoHewan();

    echo $elang->serang();
    echo $elang->serang();
    echo $harimau->serang();
    echo $harimau->serang();
    echo $harimau->serang();
    
    echo $elang->atraksi();
    echo $harimau->atraksi();

  ?>