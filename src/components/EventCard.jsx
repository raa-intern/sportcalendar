import * as React from "react";
import CardMedia from "@mui/material/CardMedia";
import {
  Grid,
  Typography,
  Button,
  Card,
  CardActions,
  CardContent,
} from "@mui/material";
import RoomIcon from "@mui/icons-material/Room";
import StarIcon from "@mui/icons-material/Star";
import image from "../assets/images/image.jpg";
import { NavLink } from "react-router-dom";
import { createStyles, makeStyles } from "@mui/styles";

const useStyles = makeStyles(() =>
  createStyles({
    name: {
      fontWeight: "500",
    },
  })
);

export default function EventCard({ event }) {
  const {
    // id,
    name,
    // type,
    // category,
    description,
    location,
    registration_date,
    start_date,
    // finish_date,
    // tags,
  } = event;

  const classes = useStyles();

  return (
    <>
      <Card sx={{ display: "flex", mb: "20px" }}>
        <Grid container>
          <Grid item xs={3}>
            <CardMedia
              component="img"
              height="100%"
              image={image}
              alt="maraphon"
            />
          </Grid>
          <Grid item xs={7}>
            <CardContent>
              <Grid container>
                <Grid item xs={8}>
                  <Typography className={classes.name}>{name}</Typography>
                  <Typography>{description}</Typography>
                  <Typography>Реєстрація {registration_date}</Typography>
                  <Typography>Дата початку {start_date}</Typography>
                </Grid>
                <Grid item xs={4}>
                  <Typography>
                    <RoomIcon /> {location}
                  </Typography>
                </Grid>
              </Grid>
            </CardContent>
          </Grid>
          <Grid item xs={2}>
            <CardActions sx={{ flexDirection: "column" }}>
              <NavLink to="/event/:eventId">Відкрити подію</NavLink>
              <Button variant="outlined" startIcon={<StarIcon />}>
                Зберігти
              </Button>
            </CardActions>
          </Grid>
        </Grid>
      </Card>
    </>
  );
}
