import { Routes } from '@angular/router';
import { DefaultDashboardComponent } from './main/dashboards/default-dashboard/default-dashboard.component';
import { ProjectsDasboardComponent } from './main/dashboards/projects-dasboard/projects-dasboard.component';
import { ProjectsComponent } from './main/apps/projects/projects.component';

export const appRoutes: Routes = [
    
    { 
      path: 'dashboard', 
      component: DefaultDashboardComponent,
    },
    
    {
      path: 'projects',
      children: [
        {
          path: '',
          redirectTo: 'home',
          pathMatch: 'full' 
        },
        {
          path: 'dashboard',
          component: ProjectsDasboardComponent
        },
        {
          path: 'home',
          component: ProjectsComponent
        },
      ]
    },
    { 
      path: '', 
      redirectTo: 'dashboard',
      pathMatch: 'full'
    },
    // 404 Error  //TODO @M4DEVPL
    { 
      path: '**', 
      redirectTo: 'dashboard',
      pathMatch: 'full'
    },
  ];