import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {
	
	loginData:any;
	
	loginName:string;
	i:any;
	f1:any=0;
	f2:any=0;

  constructor(private _router:Router ) { }

  ngOnInit() {
	  
	  this.loginData = JSON.parse(localStorage.getItem('login_user'));
	 this.loginName=this.loginData[0]["user_name"];
	  this.i=50;
	  
  }
	txt:string="Home Panel";
//	myItem:any = localStorage.getItem(key);
	//console.log("okkkkkkkkkkkkkkkk"+txt);
	
	gotoemployee(id:number):void {
			
			
			this._router.navigate(['/employee/'+id]);
	}
	openFormOne(form:any,act:any)
	{
		if(form =='form1')
		{
			this.f1=1;
			this.f2=0;
		}
		else
		{
			this.f2=1;
			this.f1=0;
		}
		
	}

}
