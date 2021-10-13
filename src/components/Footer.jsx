import React from "react";
import Container from "@mui/material/Container";
import AppBar from "@mui/material/AppBar";
import Toolbar from "@mui/material/Toolbar";
import Typography from "@mui/material/Typography";

export default function Footer() {
  return (
    <AppBar position="static" color="primary">
      <Container maxWidth="md" align="center">
        <Toolbar align="center">
          <Typography alignCenter>Footer text here</Typography>
        </Toolbar>
      </Container>
    </AppBar>
  );
}
