import React from "react";
import { withStyles } from "@material-ui/core";
import Dialog from "@mui/material/Dialog";
import { DialogContent } from "@mui/material";
import Grid from "@mui/material/Grid";
import Divider from "@mui/material/Divider";
import { IconButton } from "@mui/material";
import Button from "@mui/material/Button";
import CloseIcon from "@material-ui/icons/Close";
import Typography from "@mui/material/Typography";
import TextField from "@mui/material/TextField";
import { teal, grey } from "@material-ui/core/colors";
import {
  FacebookLoginButton,
  GoogleLoginButton,
  TwitterLoginButton,
} from "react-social-login-buttons";

const styles = () => ({
  root: {
    flexGrow: 1,
  },
  primaryColor: {
    color: teal[500],
  },
  secondaryColor: {
    color: grey[700],
  },

  padding: {
    padding: 0,
  },
  mainHeader: {
    backgroundColor: grey[0],
    padding: 10,
    alignItems: "center",
  },
  mainContent: {
    padding: 30,
  },
  secondaryContainer: {
    padding: "20px 25px",
    backgroundColor: grey[200],
  },
  marginTop: {
    margin: "20px 0 0 6px",
  },
  bottomMargin: {
    margin: "0 0 5px 0",
  },
});

function LoginModal(props) {
  const { classes } = props;

  return (
    <>
      <Dialog
        className={classes.root}
        fullWidth
        maxWidth="md"
        open={props.open}
        onClose={props.handleClose}
      >
        <DialogContent className={classes.padding}>
          <Grid container>
            <Grid item xs={8}>
              <Grid container direction="row" className={classes.mainHeader}>
                <Grid item xs={12} className={classes.secondaryContainer}>
                  <Typography className={classes.primaryColor} variant="h5">
                    Login
                  </Typography>
                </Grid>
              </Grid>
              <Grid
                style={{ alignItems: "center" }}
                container
                direction="row"
                className={classes.mainContent}
                spacing={1}
              >
                <Grid item xs={12}>
                  <Divider />
                </Grid>
                <Grid item xs={12}>
                  <Grid item xs={12} className={classes.marginTop}>
                    <FacebookLoginButton />
                  </Grid>
                  <Grid item xs={12} className={classes.marginTop}>
                    <TwitterLoginButton />
                  </Grid>
                  <Grid item xs={12} className={classes.marginTop}>
                    <GoogleLoginButton />
                  </Grid>
                </Grid>
                <Grid item xs={12}>
                  <Divider />
                </Grid>
                <Grid item xs={12}>
                  <TextField
                    fullWidth
                    margin="dense"
                    variant="outlined"
                    label="Email"
                    id="email"
                  />
                </Grid>
                <Grid item xs={12}>
                  <TextField
                    fullWidth
                    margin="dense"
                    variant="outlined"
                    label="Password"
                    id="password"
                  />
                </Grid>
                <Button
                  variant="contained"
                  color="primary"
                  fullWidth
                  className={classes.marginTop}
                >
                  Submit
                </Button>
              </Grid>
            </Grid>
            <Grid item xs={4} className={classes.secondaryContainer}>
              <Grid container>
                <Grid item xs={12} align="right" className={classes.padding}>
                  <IconButton
                    edge="start"
                    align="right"
                    color="inherit"
                    aria-label="Close"
                    style={{ padding: 8 }}
                    className={classes.padding}
                    onClick={props.handleClose}
                  >
                    <CloseIcon />
                  </IconButton>
                </Grid>
                <Grid
                  container
                  style={{ paddingTop: 10, alignItems: "center" }}
                ></Grid>
              </Grid>
              <Grid container className="mt-auto">
                <Grid item container>
                  SOME CONTENT HERE
                </Grid>
              </Grid>
            </Grid>
          </Grid>
        </DialogContent>
      </Dialog>
    </>
  );
}

export default withStyles(styles)(LoginModal);
