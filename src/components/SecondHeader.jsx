import React from "react";
import {
  AppBar,
  Stack,
  IconButton,
  Link,
  ToggleButton,
  ToggleButtonGroup,
} from "@mui/material";
import FacebookIcon from "@mui/icons-material/Facebook";
import TelegramIcon from "@mui/icons-material/Telegram";
import InstagramIcon from "@mui/icons-material/Instagram";
import PhoneIphoneIcon from "@mui/icons-material/PhoneIphone";
import FavoriteIcon from "@mui/icons-material/Favorite";

export default function SecondHeader() {
  return (
    <AppBar
      position="static"
      sx={{ flexDirection: "row", justifyContent: "space-around" }}
    >
      <Stack direction="row">
        <IconButton aria-label="facebook">
          <FacebookIcon />
        </IconButton>
        <IconButton aria-label="telegram">
          <TelegramIcon />
        </IconButton>
        <IconButton aria-label="instagram">
          <InstagramIcon />
        </IconButton>
      </Stack>

      <Link
        href="tel:+380970000000"
        underline="none"
        color="success"
        sx={{ display: "flex", alignItems: "center", mr: 2 }}
      >
        <PhoneIphoneIcon />
        +380970000000
      </Link>

      <ToggleButtonGroup
        size="small"
        color="success"
        value={"ukr"}
        exclusive
        onChange={() => {}}
      >
        <ToggleButton value="ukr">УКР</ToggleButton>
        <ToggleButton value="eng">ENG</ToggleButton>
        <ToggleButton value="rus">РУС</ToggleButton>
      </ToggleButtonGroup>

      <Link
        href="#"
        underline="none"
        color="success"
        sx={{ display: "flex", alignItems: "center", mr: 2 }}
      >
        <FavoriteIcon />
        Допомогти проекту
      </Link>
    </AppBar>
  );
}
