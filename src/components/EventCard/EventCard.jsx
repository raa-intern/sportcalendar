import * as React from "react";
import CardMedia from "@mui/material/CardMedia";
import { Grid, Card, CardContent } from "@mui/material";
import RoomIcon from "@mui/icons-material/Room";
import { ImShare2 } from "react-icons/im";
import { FiHeart } from "react-icons/fi";
import { GoCalendar } from "react-icons/go";
import image from "../../assets/images/image.png";
import { Title, Discr, IconWrap, Wrap, Button } from "./EventCard.styled";

export default function EventCard({ event }) {
  const {
    // id,
    name,
    // type,
    // category,
    description,
    location,
    registration_date,
    // start_date,
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
                  <IconWrap>
                    <GoCalendar size={18} />
                    <p>{registration_date}</p>
                  </IconWrap>
                  <IconWrap>
                    <RoomIcon /> <p>{location}</p>
                  </IconWrap>
                </Grid>
                <Title>{name}</Title>
                <Discr>{description}</Discr>
              </Grid>
            </CardContent>
          </Grid>
          <Grid
            item
            xs={2}
            style={{
              display: "flex",
              justifyContent: "center",
              alignItems: "center",
            }}
          >
            <Wrap>
              <Button>
                <FiHeart />
                Зберегти
              </Button>
              <Button>
                <ImShare2 />
                Подiлитися
              </Button>
            </Wrap>
          </Grid>
        </Grid>
      </Card>
    </>
  );
}
