import { useState } from "react";
import Container from "../Container/Container";
import SecondHeader from "../SecondHeader/SecondHeader";
import LoginModal from "../LoginModal";
import { GiHamburgerMenu } from "react-icons/gi";
import {
  NavList,
  NavListMobile,
  NavListItem,
  LogoLink,
  MainНeader,
  Button,
} from "./Header.styled";

function Нeader() {
  const [open, setOpen] = useState(false);
  const handleOpen = () => setOpen(true);
  const handleClose = () => setOpen(false);
  return (
    <MainНeader>
      <Container>
        <SecondHeader />
        <NavListMobile>
          <LogoLink href="/">Sport Calendar</LogoLink>
          <Button>
            <GiHamburgerMenu />
          </Button>
        </NavListMobile>
        <NavList>
          <LogoLink href="/">Sport Calendar</LogoLink>
          <NavListItem to="/events" activeStyle={{ color: "#00b6e0" }}>
            Події
          </NavListItem>
          <NavListItem to="/organizers" activeStyle={{ color: "#00b6e0" }}>
            Організаторам
          </NavListItem>
          <NavListItem to="/cooperation" activeStyle={{ color: "#00b6e0" }}>
            Співпраця
          </NavListItem>
          <NavListItem to="/about" activeStyle={{ color: "#00b6e0" }}>
            Про нас
          </NavListItem>
          <LoginModal handleClose={handleClose} open={open} />
          <Button onClick={handleOpen}>Вхід | Реєстрація</Button>
        </NavList>
      </Container>
    </MainНeader>
  );
}

export default Нeader;
