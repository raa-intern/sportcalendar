import { useState } from "react";
import Container from "../Container/Container";
import SecondHeader from "../SecondHeader/SecondHeader";
import MobileMenu from "../MobileMenu/MobileMenu";
import Modal from "../Modal/Modal";
// import LoginModal from "../LoginModal";
import { GiHamburgerMenu } from "react-icons/gi";
import { FaUserCircle } from "react-icons/fa";
import {
  NavList,
  NavListMobile,
  NavListItem,
  LogoLink,
  MainНeader,
  Button,
} from "./Header.styled";
import LoginForm from "../LoginForm/LoginForm";

function Нeader() {
  const [isMobileMenu, setIsMobileMenu] = useState(false);
  const [toggle, setToggle] = useState(false);

  const handleToggleOnClick = () => {
    isMobileMenu && setIsMobileMenu(false);
    setToggle(!toggle);
  };

  const handleOnMenuBtnClick = () => {
    setIsMobileMenu(true);
    handleToggleOnClick();
  };

  return (
    <MainНeader>
      <Container>
        <SecondHeader />
        <NavListMobile>
          <Button onClick={handleOnMenuBtnClick}>
            <GiHamburgerMenu />
          </Button>
          <LogoLink href="/">Sport Calendar</LogoLink>
          <Button onClick={handleToggleOnClick}>
            <FaUserCircle />
          </Button>
          {toggle && (
            <Modal closeModal={handleToggleOnClick}>
              {isMobileMenu ? <MobileMenu /> : <LoginForm />}
            </Modal>
          )}
        </NavListMobile>
        <NavList>
          <LogoLink href="/">Sport Calendar</LogoLink>
          <NavListItem to="/organizers" activeStyle={{ color: "#00b6e0" }}>
            Організаторам
          </NavListItem>
          <NavListItem to="/cooperation" activeStyle={{ color: "#00b6e0" }}>
            Співпраця
          </NavListItem>
          <NavListItem to="/about" activeStyle={{ color: "#00b6e0" }}>
            Про нас
          </NavListItem>
          {/* <LoginModal handleClose={handleToggleOnClick} open={toggle} /> */}
          <Button /*onClick={handleToggleOnClick}*/>Вхід | Реєстрація</Button>
        </NavList>
      </Container>
    </MainНeader>
  );
}

export default Нeader;
