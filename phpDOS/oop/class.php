<?php 
// declare(strict_types=1);

// $sale= new Sale(10.5, date("Y-m-d"));
// $sale= new Sale(10.5, date("Y-m-d"));
// echo Sale::$count." ";
// Sale::reset();
// $sale= new Sale(10.5, date("Y-m-d"));
// echo $sale->createInvoice();

$sale= new Sale(date("Y-m-d"));
$onlineSale= new OnlineSale(date("Y-m-d"), "Tarjeta");
// echo $onlineSale->createInvoice();
// echo $onlineSale->showInfo();
// echo $onlineSale->createInvoice();

$concept= new Concept("cerveza", 10.2);
$concept2= new Concept("cerveza 2", 20.23);
$sale->addConcept($concept);
$sale->addConcept($concept2);
// echo $sale->getTotal();
echo $sale->getDate();
$sale->setDate("kkkkkkkkkkkkkkkkkkkkkkkkkkkkkk");
// print_r($sale->concepts);

// echo gettype($sale);
// print_r($sale);

// echo Sale::$count;

class Sale{
    protected float $total;
    private string $date;
    public static $count;
    private array $concepts;

    public function __construct(string $date){
            $this->total= 0;
            $this->date= $date;
            $this->concepts= [];
            self::$count++;
        }

    public function createInvoice():string{
        return "Se crea la factura";
    }
 
    public static function reset(){
        self::$count = 0;
    }

    public function addConcept(Concept $concept){
        $this->concepts[] = $concept;
        $this->total += $concept->amount;
    }

    public function getTotal() : float {
        return $this->total;
    }

    public function getDate(): string {
        return $this->date;
    }

    public function setDate(string $date){
        if(strlen($date) > 10){
            echo "La fecha es incorrecta";
        }
        $this->date = $date;
    }


    //Ejemplo funcion destructura
    // public function __destruct(){
    //         echo "Se ha eliminado el objeto";
    // }

}

//Ejemplo de herencia
class OnlineSale extends Sale{

    public $paymentMethod;

    public function __construct(string $date, string $paymentMethod){
        parent::__construct($date);
        $this->paymentMethod= $paymentMethod;
    }

    public function showInfo(): string{
        return "La venta tiene un monto de : $this->total";
    }
}

class Concept{
    public string $description;
    public float $amount;

    //EJemplo union dato|dato
    public function __construct(string $description, int|float $amount){
            $this->description = $description;
            $this->amount = $amount;
        }
}