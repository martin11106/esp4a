import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { AngularFireModule } from 'angularfire2';
import { AngularFirestoreModule } from 'angularfire2/firestore';
import { AngularFireStorageModule } from 'angularfire2/storage';
import { AngularFireAuthModule } from 'angularfire2/auth';
import { AngularFireDatabaseModule } from 'angularfire2/database';
// import { EspService } from '../services/esp.service';



  // Initialize Firebase
  const firebaseConfig: any = {
    apiKey: "AIzaSyBtY3EC-M9aU2IO5Cc8S8hCGkF7AKgHNBU",
    authDomain: "esp4a-iot-ebfd6.firebaseapp.com",
    databaseURL: "https://esp4a-iot-ebfd6.firebaseio.com",
    projectId: "esp4a-iot-ebfd6",
    storageBucket: "esp4a-iot-ebfd6.appspot.com",
    messagingSenderId: "610785658186"
  };


@NgModule({
  declarations: [
    AppComponent
  ],
  imports: [
    BrowserModule,
    AngularFireModule.initializeApp(firebaseConfig),
    AngularFirestoreModule,
    AngularFireAuthModule,
    AngularFireStorageModule,
    AngularFireDatabaseModule,
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
