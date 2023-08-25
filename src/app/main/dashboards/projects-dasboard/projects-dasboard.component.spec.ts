import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ProjectsDasboardComponent } from './projects-dasboard.component';

describe('ProjectsDasboardComponent', () => {
  let component: ProjectsDasboardComponent;
  let fixture: ComponentFixture<ProjectsDasboardComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [ProjectsDasboardComponent]
    });
    fixture = TestBed.createComponent(ProjectsDasboardComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
