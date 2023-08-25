import { Dashboard } from "../interfaces/dashboard";

export const dashboards: Dashboard[] = [
    // Default Dashboard
    { 
        code: "default",
        name: "Default",
        description: "Reports & Statistics",
        iconTemplate: `
            <i class="ki-duotone ki-element-11 text-primary fs-1">
                <i class="path1"></i>
                <i class="path2"></i>
                <i class="path3"></i>
                <i class="path4"></i>
            </i>
        `,
        links: ["dashboard",""],
        position: "main"
    },
    // Projects Dashboard
    {
        code: "projects",
        name: "Projects",
        description: "Tasks, Managing & Costs",
        iconTemplate: `
            <i class="ki-duotone ki-abstract-44 text-info fs-1">
                <i class="path1"></i>
                <i class="path2"></i>
            </i>
        `,
        links: ["projects"],
        position: "main"
    }
]