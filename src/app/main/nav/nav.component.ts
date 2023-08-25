import { Component, Input, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { Dashboard } from 'src/app/interfaces/dashboard';
import { dashboards } from '../app-dashboards';

@Component({
  selector: 'app-nav',
  templateUrl: './nav.component.html',
  styleUrls: ['./nav.component.css']
})
export class NavComponent implements OnInit {
  //#region === Dashboards ===
  public mainDashboards: Dashboard[] = dashboards.filter(dashboard => dashboard.position === "main"); // Gets Dashboards specified as main
  public sideDashboards: Dashboard[] = dashboards.filter(dashboard => dashboard.position === "side"); // Gets Dashobards specified as additional
  //#endregion
  isHomeActive: boolean = false;

  constructor() {
  }

  ngOnInit(): void {
  }

}
