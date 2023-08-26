export interface Project {
    id: number,
    name: string,
    customerName: string,
    shortDescription: string,
    description: string,
    status: string,
    releaseDate: Date,
    tags: string[]
}
