import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppComponent } from './app.component';
import { NavComponent } from './main/nav/nav.component';
import { DefaultDashboardComponent } from './main/dashboards/default-dashboard/default-dashboard.component';
import { AppRoutingModule } from './app-routing.module';
import { FooterComponent } from './main/footer/footer.component';
import { ProjectsDasboardComponent } from './main/dashboards/projects-dasboard/projects-dasboard.component';

@NgModule({
  declarations: [
    AppComponent,
    NavComponent,
    DefaultDashboardComponent,
    FooterComponent,
    ProjectsDasboardComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
