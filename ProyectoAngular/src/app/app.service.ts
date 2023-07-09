import { Injectable } from "@angular/core";
import { Observable } from "rxjs";
import { productos } from './app.productos'; 

import { HttpClient } from '@angular/common/http'

@Injectable()

export class ProductosServicios {

    
    private ApiProductos = "/productos";
    
    constructor(public http:HttpClient){}

    public getProductos():Observable<any>{
        return this.http.get(this.ApiProductos);
    }

    public addProducto(productos:productos):Observable<productos>{
        return this.http.post<productos>(this.ApiProductos, productos);
    }

    updateProducto(codigo:number, productos:productos):Observable<productos>{
        return this.http.put<productos>(this.ApiProductos + `?IDCodigo=${codigo}`, productos);
      }

    eliminarProducto(codigo:number):Observable<productos>{
        let data = { flag:1};
       return this.http.put<productos>(this.ApiProductos + `?IDCodigo=${codigo}`, data);
    }
}

