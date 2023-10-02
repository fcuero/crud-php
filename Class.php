
<style>
	.fila{
	   background-color: hsl(134, 54, 144);
	   width:20%;
	   height:200px;
	   margin-left:10%;
	   margin-right:10%;
	   border:3px solid rgb(37, 197, 23);
   
   }
  </style>
  

<div class="fila">
 <?php
    
    class Producto {
        private $nombre;
        private $precio;

        public function __construct($nombre, $precio) {
            $this->nombre = $nombre;
            $this->precio = $precio;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function getPrecio() {
            return $this->precio;
        }

        public function calcularPrecioConImpuestos() {
            $impuesto = 0.18; 
            $precioConImpuestos = $this->precio * (1 + $impuesto);
            return $precioConImpuestos;
        }
    }

    
    $producto = new Producto("Celular", 100);

    
    $nombreProducto = $producto->getNombre();
    $precioProducto = $producto->getPrecio();

    
    $precioConImpuestos = $producto->calcularPrecioConImpuestos();


    echo "Producto: " . $nombreProducto . "<br>";
    echo "Precio del producto: $" . $precioProducto . "<br>";
    echo "Precio con impuestos: $" . $precioConImpuestos . "<br>";


 ?>
</div>