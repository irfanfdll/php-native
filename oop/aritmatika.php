
class Aritmatika{
    public function __construct($bilangan1,$bilangan2){
        $this-> bilangan1 = "$bilangan1";
        $this-> bilangan2 = "$bilangan2";
        $tambah =$this-> bilangan1 +$this-> bilangan2;
    }
    public function tambah()
        {
            
            return ($this->bilangan1 + $this->bilangan2 );
        }
        public function kurang()
        {
            
            return ($this->bilangan1 - $this->bilangan2 );
        }
        public function kali()
        {
            
            return ($this->bilangan1 * $this->bilangan2 );
        }
        public function bagi()
        {
            
            return ($this->bilangan1 / $this->bilangan2 );
        }
        public function modulus()
        {
            
            return ($this->bilangan1 % $this->bilangan2 );
        }
        
        
}