import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent  implements OnInit{
  ngOnInit():void{

  }
  Prender(){
    alert('hola mundo')
    
  }
  title = 'esp4a';
}
