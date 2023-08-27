import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppComponent } from './app.component';
import { NavComponent } from './main/nav/nav.component';
import { DefaultDashboardComponent } from './main/dashboards/default-dashboard/default-dashboard.component';
import { AppRoutingModule } from './app-routing.module';
import { FooterComponent } from './main/footer/footer.component';
import { ProjectsDasboardComponent } from './main/dashboards/projects-dasboard/projects-dasboard.component';
import { ProjectsComponent } from './main/apps/projects/projects.component';
import { PageLoaderComponent } from './main/page-loader/page-loader.component';
import { AngularFireModule} from  '@angular/fire/compat';
import { environment } from 'src/environments/environment';

@NgModule({
  declarations: [
    AppComponent,
    NavComponent,
    DefaultDashboardComponent,
    FooterComponent,
    ProjectsDasboardComponent,
    ProjectsComponent,
    PageLoaderComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    AngularFireModule.initializeApp(environment.firebase)
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
