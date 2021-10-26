import * as React from "react";
import CardMedia from "@mui/material/CardMedia";
import { Grid, Typography, Button } from "@mui/material";
import RoomIcon from "@mui/icons-material/Room";
import StarIcon from "@mui/icons-material/Star";
import image from "../assets/images/image.jpg";
import { NavLink } from "react-router-dom";

export default function EventCard() {
  return (
    <Grid container spacing={3}>
      <Grid item xs={3}>
        <CardMedia
          component="img"
          height="140"
          image={image}
          alt="green iguana"
        />
      </Grid>
      <Grid item xs={4}>
        <Typography>Змагання</Typography>
        <Typography>Опис змагання</Typography>
        <Typography>Реєстрація до 10 липня 2019</Typography>
        <Typography>Дата початку 16 липня 2019 о 12:00</Typography>
      </Grid>
      <Grid item xs={3}>
        <Typography>
          <RoomIcon /> Адреса
        </Typography>
      </Grid>
      <Grid item xs={2}>
        <NavLink to="/event/:eventId">Відкрити подію</NavLink>
        <Button variant="outlined" startIcon={<StarIcon />}>
          Зберігти цю подію
        </Button>
      </Grid>
    </Grid>
  );
}
