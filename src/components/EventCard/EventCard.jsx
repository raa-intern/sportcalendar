import * as React from "react";
// import CardMedia from "@mui/material/CardMedia";
import { Card } from "@mui/material";
import RoomIcon from "@mui/icons-material/Room";
import { ImShare2 } from "react-icons/im";
import { FiHeart } from "react-icons/fi";
import { GoCalendar } from "react-icons/go";
import image from "../../assets/images/image.png";
import {
  Title,
  Discr,
  P,
  ButtonWrap,
  Button,
  CardContainer,
  Image,
  CardContent,
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
    // start_date,
    // finish_date,
    // tags,
  } = event;

  return (
    <>
      <Card sx={{ display: "flex", mb: "20px" }}>
        <CardContainer>
          <div>
            <Image src={image} alt="maraphon" />
          </div>
          <div>
            <CardContent>
              <div>
                <P>
                  <GoCalendar size={22} />
                  {registration_date}
                </P>
                <P>
                  <RoomIcon />
                  {location}
                </P>
              </div>
              <Title>{name}</Title>
              <Discr>{description}</Discr>
            </CardContent>
          </div>
          <ButtonWrap>
            <Button>
              <FiHeart />
              Зберегти
            </Button>
            <Button>
              <ImShare2 />
              Подiлитися
            </Button>
          </ButtonWrap>
        </CardContainer>
      </Card>
    </>
  );
}
