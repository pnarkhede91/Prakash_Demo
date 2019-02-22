import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { LoggedInGuard } from './employees/login_check.service';



@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit {
	
	loginStatus:any=false;
	mymodel:any=false;
	fullImagePath:string;
	constructor(private _router:Router,private lgard:LoggedInGuard) {}
	ngOnInit(){
		this.loginStatus=this.lgard.checkLogin();
		this.fullImagePath = '/assets/images';
	}
 
}
