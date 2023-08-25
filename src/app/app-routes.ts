import { Routes } from '@angular/router';
import { DefaultDashboardComponent } from './main/dashboards/default-dashboard/default-dashboard.component';
import { ProjectsDasboardComponent } from './main/dashboards/projects-dasboard/projects-dasboard.component';

export const appRoutes: Routes = [
    { 
      path: '', 
      component: DefaultDashboardComponent,
    },
    { 
      path: 'dashboard', 
      component: DefaultDashboardComponent,
    },
    {
      path: 'projects',
      component: ProjectsDasboardComponent
    }
  ];