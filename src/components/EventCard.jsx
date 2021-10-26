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

export default function EventCard() {
  return (
    <>
      <Card sx={{ display: "flex" }}>
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
                  <Typography>Змагання</Typography>
                  <Typography>Опис змагання</Typography>
                  <Typography>Реєстрація до 10 липня 2019</Typography>
                  <Typography>Дата початку 16 липня 2019 о 12:00</Typography>
                </Grid>
                <Grid item xs={4}>
                  <Typography>
                    <RoomIcon /> Адреса
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
