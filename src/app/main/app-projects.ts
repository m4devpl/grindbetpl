import { Project } from "src/app/interfaces/project"

export const projects: Project[] = [
    {
        id: 1,
        name: "GrindBet.PL",
        customerName: "GrindBet.PL",
        shortDescription: "Comprehensive productivity application",
        description: "GRINDBET is a comprehensive productivity application that aims to help users in different areas of their lives. With its various features and tools, this app can assist you in managing your tasks and projects, maintaining your health, organizing your wallet and keeping track of your calendar.",
        releaseDate: new Date(2023,11,20),
        status: 'In Progress',
        tags: []
    },
    {
        id: 2,
        name: 'Ausardia',
        customerName: 'Ausardia',
        shortDescription: 'Wear...',
        description: 'Wear...',
        releaseDate: new Date(2023,11,10),
        status: 'Not Started',
        tags: []
    }
]