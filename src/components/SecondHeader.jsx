import React from "react";
import {
  AppBar,
  Stack,
  IconButton,
  Link,
  ToggleButton,
  ToggleButtonGroup,
} from "@mui/material";
import { createStyles, makeStyles } from "@mui/styles";
import FacebookIcon from "@mui/icons-material/Facebook";
import TelegramIcon from "@mui/icons-material/Telegram";
import InstagramIcon from "@mui/icons-material/Instagram";
import PhoneIphoneIcon from "@mui/icons-material/PhoneIphone";

const useStyles = makeStyles((theme) =>
  createStyles({
    appBar: {
      flexDirection: "row",
      alignItems: "center",
      paddingLeft: "24px",
      paddingRight: "24px",
    },

    socialIcons: {
      alignItems: "center",
      flexGrow: 1,
      "& > button, & > a": {
        color: theme.palette.primary.contrastText,
        "&:hover, &:focus": { color: theme.palette.secondary.light },
      },
    },

    langToogle: {
      "& > button": {
        "&.Mui-selected": {
          color: theme.palette.secondary.light,
          fontWeight: "700",
        },
        borderColor: "transparent",
        color: theme.palette.primary.contrastText,
      },
    },

    donation: {
      textTransform: "uppercase",
      fontSize: "14px",
      marginRight: "24px",
      color: theme.palette.primary.contrastText,
      "&:hover, &:focus": { color: theme.palette.secondary.light },
    },
  })
);

export default function SecondHeader() {
  const classes = useStyles();

  return (
    <AppBar position="static" className={classes.appBar}>
      <Stack direction="row" className={classes.socialIcons}>
        <IconButton aria-label="facebook">
          <FacebookIcon />
        </IconButton>
        <IconButton aria-label="telegram">
          <TelegramIcon />
        </IconButton>
        <IconButton aria-label="instagram">
          <InstagramIcon />
        </IconButton>
        <Link href="tel:+380970000000" underline="none" sx={{ p: "8px" }}>
          <PhoneIphoneIcon />
        </Link>
      </Stack>

      <Link href="#" underline="none" className={classes.donation}>
        Допомогти проекту
      </Link>

      <ToggleButtonGroup
        size="small"
        className={classes.langToogle}
        value={"ukr"}
        onChange={() => {}}
      >
        <ToggleButton value="ukr">УКР</ToggleButton>
        <ToggleButton value="eng">ENG</ToggleButton>
        <ToggleButton value="rus">РУС</ToggleButton>
      </ToggleButtonGroup>
    </AppBar>
  );
}
