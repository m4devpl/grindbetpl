import { Component, Renderer2, ElementRef, OnInit } from '@angular/core';
import { Project } from 'src/app/interfaces/project';
import { projects } from '../../app-projects';

@Component({
  selector: 'app-projects',
  templateUrl: './projects.component.html',
  styleUrls: ['./projects.component.css'],
})
export class ProjectsComponent implements OnInit {
  constructor(private renderer: Renderer2, private el: ElementRef) {}
  projectList: Project[] = projects;

  ngOnInit(): void {
    
    this.addScriptToDOM("/assets/js/custom/apps/projects/list/list.js");


  }

  addScriptToDOM(src: string): void {
    const script = this.renderer.createElement('script');
    script.type = 'text/javascript';
    script.src = src;
    this.renderer.appendChild(this.el.nativeElement, script);
  }
}