import React from "react";
import { NavLink } from "react-router-dom";
import SecondHeader from "./SecondHeader";
import LoginModal from "./LoginModal";
import { AppBar, Box, Toolbar, Button, Typography } from "@mui/material";
import { createStyles, makeStyles } from "@mui/styles";

const useStyles = makeStyles((theme) =>
  createStyles({
    navLink: {
      textDecoration: "none",
      color: theme.palette.primary.contrastText,
      "&:hover, &:focus": { color: theme.palette.secondary.light },
    },
  })
);

export default function ButtonAppBar() {
  const [open, setOpen] = React.useState(false);
  const handleOpen = () => setOpen(true);
  const handleClose = () => setOpen(false);

  const classes = useStyles();
  return (
    <Box>
      <SecondHeader />
      <AppBar position="static">
        <Toolbar sx={{ justifyContent: "space-between", width: "100%" }}>
          <Typography variant="h6" component="div" sx={{ ml: 2 }}>
            Sport Calendar
          </Typography>
          <NavLink to="/events" className={classes.navLink}>
            Події
          </NavLink>
          <NavLink to="/organizers" className={classes.navLink}>
            Організаторам
          </NavLink>
          <NavLink to="/cooperation" className={classes.navLink}>
            Співпраця
          </NavLink>
          <NavLink to="/about" className={classes.navLink}>
            Про нас
          </NavLink>
          <LoginModal handleClose={handleClose} open={open} />
          <Button color="inherit" onClick={handleOpen}>
            Вхід | Реєстрація
          </Button>
        </Toolbar>
      </AppBar>
    </Box>
  );
}
