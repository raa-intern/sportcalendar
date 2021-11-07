import styled from "@emotion/styled/macro";
import { NavLink } from "react-router-dom";

export const AppBar = styled.div`
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  padding-top: 10px;
  padding-bottom: 10px;
`;

export const Wrap = styled.div`
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  width: 110px;
`;

export const WrapLang = styled.div`
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  width: 320px;
`;

export const NavLinkStyled = styled(NavLink)`
  font-size: 14px;
  font-weight: 400;
  text-transform: uppercase;
  color: var(--base-color);
  &:hover,
  &:focus {
    color: var(--accent-color);
  }
`;

export const ContactLink = styled.a`
  font-size: 20px;
  color: var(--base-color);
  &:hover,
  &:focus {
    color: var(--accent-color);
    transform: scale(1.2);
  }
`;
