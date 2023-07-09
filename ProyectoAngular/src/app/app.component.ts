import { Component,OnInit } from '@angular/core';
import { ProductosServicios } from './app.service';
import { productos } from './app.productos'; 

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html', 
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  selectedProduct:any;
  productos:productos = new productos();

  datatable:any [] = [] ;

  constructor(public producto:ProductosServicios){}

  ngOnInit(): void {
    this.onDataTable();
  }

  onDataTable(){
    this.producto.getProductos().subscribe(res => {
      this.datatable = res;
      console.log(res);
    });
  }

  onAddProduto(productos:productos):void{
    this.producto.addProducto(productos).subscribe
    (
      res => {
      if(res){
        alert(`Se ha registrado con exito!`);
         this.onDataTable();
         this.clear();
      } else {
        alert('Error')
      }
      });
  } 

  onUpdateProducto(productos:productos):void{
    this.producto.updateProducto(productos.Codigo, productos).subscribe(res => {
      if(res){
        alert(`La articulo número ${productos.Codigo} se ha modificado con exito!`);
        this.onDataTable();
        this.clear();
      } else {
        alert('Error! :(')
      }
    });
  }

  onEliminarProducto(productos:productos):void{
    this.producto.eliminarProducto(productos.Codigo).subscribe(res => {
      if(res){
        alert(`La articulo número ${productos.Codigo} se ha modificado con exito!`);
        this.onDataTable();
      } else {
        alert('Error! :(')
      }
    });
  }

  clear(){
    this.productos.Codigo = 0;
    this.productos.Nombre = "";
    this.productos.Categoria = "";
    this.productos.Marca = "";
    this.productos.Caracteristicas = "";
  }

  onSelectRow(item:any){
    this.selectedProduct = item; 
    this.productos.Codigo = item.Codigo;
    this.productos.Nombre = item.Nombre;
    this.productos.Categoria = item.Categoria;
    this.productos.Marca = item.Marca;
    this.productos.Caracteristicas = item.Caracteristicas;
  }

}
