interface ImportMetaEnv {
    VITE_URL: string;
    VITE_NAME: string;
    VITE_ENV: "local" | "production";
}
declare namespace NodeJS {
    export interface ArrayAny {
        [key: string]: any;
    }
    export interface ProcessEnv {}
}
