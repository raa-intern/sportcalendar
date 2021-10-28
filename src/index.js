import React from "react";
import ReactDOM from "react-dom";
import { BrowserRouter } from "react-router-dom";
import { createTheme, ThemeProvider } from "@mui/material";

import "./index.css";
import App from "./App";

const theme = createTheme({
  palette: {
    type: "light",
    primary: {
      main: "#3f51b5",
      //1A1A47
    },
    secondary: {
      main: "#f50057",
    },
  },
});

ReactDOM.render(
  <React.StrictMode>
    <BrowserRouter>
      <ThemeProvider theme={theme}>
        <App />
      </ThemeProvider>
    </BrowserRouter>
  </React.StrictMode>,
  document.getElementById("root")
);
