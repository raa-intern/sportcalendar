import React from "react";
import SecondHeader from "./SecondHeader";
import LoginModal from "./LoginModal";
import {
  AppBar,
  Box,
  Toolbar,
  Button,
  IconButton,
  Typography,
} from "@mui/material";

export default function ButtonAppBar() {
  const [open, setOpen] = React.useState(false);
  const handleOpen = () => setOpen(true);
  const handleClose = () => setOpen(false);
  return (
    <Box sx={{ flexGrow: 1 }}>
      <SecondHeader />
      <AppBar position="static">
        <Toolbar>
          <IconButton
            size="large"
            edge="start"
            color="inherit"
            aria-label="menu"
          ></IconButton>
          <Typography variant="h6" component="div" sx={{ flexGrow: 1 }}>
            Sport Calendar
          </Typography>
          <LoginModal handleClose={handleClose} open={open} />
          <Button color="inherit" onClick={handleOpen}>
            Login
          </Button>
        </Toolbar>
      </AppBar>
    </Box>
  );
}
