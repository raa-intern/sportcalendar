import styled from "@emotion/styled/macro";
import { NavLink } from "react-router-dom";

export const Title = styled.h1`
  font-size: 16px;
  font-weight: 700;
  color: var(--black-color);
  margin-bottom: 10px;
`;

export const Discr = styled.p`
  font-size: 14px;
  margin-bottom: 10px;
`;

export const LocationWrap = styled.div`
  display: flex;
  align-items: center;
  & > svg {
    color: var(--accent-color);
  }
`;

export const Wrap = styled.div`
  display: flex;
  flex-direction: column;
  margin-top: 15px;
  margin-right: 15px;
`;

export const NavLinkStyled = styled(NavLink)`
  display: flex;
  align-items: center;
  justify-content: center;
  border: 1px solid var(--accent-color);
  border-radius: 15px;
  color: var(--accent-color);
  padding: 10px 8px;
  margin-bottom: 15px;
  &:focus,
  &:hover {
    background-color: var(--accent-color);
    color: var(--white-color);
  }
`;
