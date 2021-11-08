import * as React from "react";
import CardMedia from "@mui/material/CardMedia";
import { Grid, Card, CardContent } from "@mui/material";
import RoomIcon from "@mui/icons-material/Room";
import image from "../../assets/images/image.png";
import {
  Title,
  NavLinkStyled,
  Discr,
  LocationWrap,
  Wrap,
} from "./EventCard.styled";

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
                  <Title>{name}</Title>
                  <Discr>{description}</Discr>
                  <Discr>Реєстрація {registration_date}</Discr>
                  <Discr>Дата початку {start_date || registration_date}</Discr>
                </Grid>
                <Grid item xs={4}>
                  <LocationWrap>
                    <RoomIcon /> <p>{location}</p>
                  </LocationWrap>
                </Grid>
              </Grid>
            </CardContent>
          </Grid>
          <Grid item xs={2}>
            <Wrap>
              <NavLinkStyled to="/event/:eventId">Відкрити подію</NavLinkStyled>
              <NavLinkStyled to="/event/:eventId">Зберегти</NavLinkStyled>
            </Wrap>
          </Grid>
        </Grid>
      </Card>
    </>
  );
}
